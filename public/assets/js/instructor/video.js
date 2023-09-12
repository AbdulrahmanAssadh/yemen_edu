import {ElementID, optionWithEvent} from '../utils/domElement.js';
import {fetchGet, HttpRequest} from "../utils/HttpRequest.js";
import {Utils} from "../utils/Utils.js";

const App = {

    sendData: `${Utils.rootURL}/instructor/video/save`,
    dataC: `${Utils.rootURL}/instructor/course/user`,
    fetchData: fetchGet,
    element: ElementID(['courses', 'upload', 'canvas','drag','video','formData']),
    addOption: optionWithEvent,
    base64toFile:Utils.dataURLtoFile,
    xhr:new XMLHttpRequest(),
    init: () => {
        App.xhr.addEventListener('progress',e=>{
            App.element.upload.style.width=`${Math.floor((e.loaded/e.total)*100)}%`;
            console.log(e.loaded,e.total);
        });


        App.fetchData(App.dataC, (data) => {
            App.addOption(App.element.courses, data)
        });



        App.element.upload.addEventListener('click', e => {
            e.preventDefault();

           let file_image= App.getImage(App.element.video, App.element.canvas);

           let formdata=new FormData(App.element.formData);
           formdata.append('img',file_image);
            App.element.upload.classList.add('active');


            App.xhr.onload=()=>{
                if ( App.xhr.status === 200 &&  App.xhr.readyState === XMLHttpRequest.DONE) {
                    let result =  App.xhr.response;
                    console.log(result);
                    App.element.upload.classList.remove('active');
                    //this.todo(this.result);
                }
            }



            App.xhr.open('post',App.sendData,true);
            App.xhr.send(formdata);


           // App.xhr.start('post',App.sendData,(d)=>{App.element.upload.classList.remove('active');},formdata);



            //

        });
    },


    getImage: (video,canvas) => {

       canvas.width = video.width;
        canvas.height =video.height;
        var context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width,canvas.height);
// console.log(App.element.canvas.toDataURL('jpg'));
        let imgData =Utils.dataURLtoFile(App.element.canvas.toDataURL('jpg'),`${(new Date()).getTime()}.jpg`);
return imgData;
    },


}

document.addEventListener('DOMContentLoaded', App.init());


