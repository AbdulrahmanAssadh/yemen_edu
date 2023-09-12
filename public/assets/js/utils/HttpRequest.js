class HttpRequest {

    static httpRequest;
    request;
   todo= null;
    url = null;
    result;

    constructor() {
        this.request = new XMLHttpRequest();
        this.result = 'error';
        this.onloade();
        // this.request.addEventListener('progress',this.onProgress);
    }

    static getInstace() {
        if (this.httpRequest !== null) {
            this.httpRequest = new HttpRequest();
        }
        return this.httpRequest;
    }

    async start(type, url,todo, data){
        this.todo=todo;
        await this.open(type,url);
      this.send(type,data);

        return this.result;

    }

    onloade() {

        this.request.addEventListener('load',  (e)=> {

            if (this.request.status === 200 && this.request.readyState === XMLHttpRequest.DONE) {
                this.result = this.request.response;
                 this.todo(this.result);
            }
        });

    }

    onProgress(e){

    }

    open(type, url) {
        this.request.open(type, url, true);
    }

     send(type, data) {
        if (type === 'post') {
            if (data !== null) {
                this.request.send(data);
            }
        } else {
            this.request.send();
        }
    }


}


async function fetchGet(url,todo){
  await fetch(url)
      .then(respons=>{
          if(respons.ok){
              return respons.json();
          }
          else {
              return 'error';
              // return respons.status;
          }
      })
      .then(data=>{
          todo(data);
      })
      .catch(error=>{
          console.error(error);
      });
}


async function fetchPost(url,todo,data){
    await fetch(url,{
        method:'POST',
        body:data,
    })
        .then(respons=>{
            if(respons.ok){
                return respons.text();
            }
            else {
               return 'error';
            }
        })
        .then(data=>{
            todo(data);
        }).catch(error=>{
        console.error(error);
    });
}

export  {HttpRequest, fetchGet,fetchPost} ;
