import {ElementID,optionWithEvent} from '../utils/domElement.js';
import {fetchGet} from "../utils/HttpRequest.js";
import {Utils} from "../utils/Utils.js";

const App={

    dataCat:`${Utils.rootURL}/instructor/category`,
    dataDip:`${Utils.rootURL}/instructor/diploma/course/user`,
    fetchData:fetchGet,
    element:ElementID(['videos_taab','playlist-tab']),
    addOption:optionWithEvent,
    data:null,
    init:()=>{
console.log(App.element.videos_taab);
     //   App.fetchData(App.dataCat,(data)=>{App.addOption( App.element.categories,data)});
    },


}

document.addEventListener('DOMContentLoaded',App.init());
