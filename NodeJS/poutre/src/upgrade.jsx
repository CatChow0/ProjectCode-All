import React from "react";

function Upgrade(){

   function CloseUpgrade() {
    const UpMenu = document.querySelector('UpMenu')
    UpMenu.addEventListener('click', ()=>{
        UpMenu.classList.remove('On')
    })
   }

    return (
        <div>
            <div className="UpMenu On">
                <div className="CloseMenu NoSelect">
                    <button onClick={CloseUpgrade}>
                        X
                    </button>
                    
                </div>

            </div>
            <div className="Up_title" >
                <button className="custom-btn btn-5 NoSelect">
                    <span>
                        Upgrade
                    </span>
                </button> 
            </div>
        </div>

    );
}

export default Upgrade;

