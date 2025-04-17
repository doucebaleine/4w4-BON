(function(){
    let boutonCarroussel = document.querySelectorAll(".hero__radio__input");
    for (const bouton of boutonCarroussel){
        bouton.addEventListener("click", updaterImage);
    }

    let backgrounds = document.querySelectorAll(".hero__carrousel");
    let i = 0;

    function updaterImage(event){
        console.log("BAM");
        const id = event.target.getAttribute("data-id_radio");

        backgrounds[i].classList.remove("actif");

        i = id;
        backgrounds[i].classList.add("actif");
    }
    

    setInterval(()=>{
        backgrounds[i].classList.remove("actif");

        if (i>=2){
            i=0
        } else{
            i++;
        }
        backgrounds[i].classList.add("actif");

        boutonCarroussel.forEach((bouton)=>{
            bouton.checked=false
            boutonCarroussel[i].checked=true;
        })
    }, 5000)

    // setInterval
    })()

    
