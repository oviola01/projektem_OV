import {DataService} from "../Model/DataService.js";

class Controller{
    constructor(){
        this.dataService=new DataService();
        this.dataService.getAxiosData("api/tabla1s", this.setContent());
        this.dataService.postAxiosData("api/tabla1s", {
            //idejönabelerakós
        });
        this.dataService.putAxiosData("api/tabla1s", {
            //idejönabelerakós
        });
        this.dataService.deleteAxiosData("api/tabla1s", 3);
    }

    setContent(what){
        console.log(what);
        let txt = '<table>';
        
        txt += '</table>';
    }
}