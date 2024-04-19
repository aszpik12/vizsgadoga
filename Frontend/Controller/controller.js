import adatModell from "../modell/adatModell.js";

class controller{
    #adatok;
    #kozpont;
    #gomb;

    constructor(){  
        this.#adatok = new adatModell();
    }
}
export default controller;