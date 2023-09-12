import {ElementID,optionWithEvent} from '../utils/domElement.js';
import {fetchGet} from "../utils/HttpRequest.js";
import {Utils} from "../utils/Utils.js";

const App={

    dataCat:`${Utils.rootURL}/instructor/category`,
    dataDip:`${Utils.rootURL}/instructor/diploma/course/user`,
    fetchData:fetchGet,
    element:ElementID(['categories','diplomas']),
    addOption:optionWithEvent,
    data:null,
    init:()=>{

       App.fetchData(App.dataCat,(data)=>{App.addOption( App.element.categories,data)});
        App.fetchData(App.dataDip,(data)=>{App.addOption( App.element.diplomas,data)});
    },


}

document.addEventListener('DOMContentLoaded',App.init());
