import React, {useState} from "react";

function Patate( {text} ){

    const [nb_ptr, setNbPtr] = useState(0)
    const [nb_arg, setNbArg] = useState(0)


    function add_poutre() {
        setNbPtr(nb_ptr + 1)
        console.log("plus")
    }

    function sell_poutre() {
        setNbArg(nb_arg + nb_ptr)
        setNbPtr(nb_ptr-nb_ptr)
    }
    
    return (
        <div>
            <div>
                <div className="menu">
                    <p className="NoSelect">
                        Nombre de poutre : {nb_ptr}
                    </p>

                    <p className="NoSelect">
                        Argent : {nb_arg}
                    </p>
                </div>

                <img className="poutre NoSelect" src="asset/pngegg.png" onClick={add_poutre} alt="Poutre"></img>
            </div>
            <div>
                <div className="button" >
                    <a className="NoSelect" onClick={sell_poutre}>
                        PRENEZ MES POUTRES!!!!
                    </a>
                </div>
    

            </div>

        </div>
    );
}

export default Patate;