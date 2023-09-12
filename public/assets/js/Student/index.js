import {HttpRequest,fetchGet} from "../utils/HttpRequest.js";

let baseURL=document.location.origin;

let dataurl1=`${baseURL}/user`;
let dataurl2=`${baseURL}/u`;
// let xhr=HttpRequest.getInstace();

// xhr.start('get',dataurl1,todo);
// xhr.start('get',dataurl2,todo);

// fetchGet(dataurl1,todo);
// fetchGet(dataurl2,todo);
function todo(r){
    console.log(r);
}
