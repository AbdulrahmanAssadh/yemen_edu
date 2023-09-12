


import {ElementID,optionWithEvent} from '../utils/domElement.js';
import {fetchGet, HttpRequest} from "../utils/HttpRequest.js";
import {Utils} from "../utils/Utils.js";

const App={

    ulrQ:`${Utils.rootURL}/instructor/course/question/save`,
    urlA:`${Utils.rootURL}/instructor/diploma/course/user`,
    fetchData:fetchGet,
    element:ElementID(['formQuestion','submitQuestion','bodyQ']),
    addOption:optionWithEvent,
    xhr:HttpRequest.getInstace(),
    init:()=>{
        let formData=new FormData(App.element.formQuestion);
        App.element.submitQuestion.addEventListener('click',e=>{
            e.preventDefault();
            App.xhr.start('post',App.ulrQ,(d)=>{
                App.element.bodyQ.value='';
            },formData);
        });


        //   App.fetchData(App.dataCat,(data)=>{App.addOption( App.element.categories,data)});
    },


}

document.addEventListener('DOMContentLoaded',App.init());
