//composer require tightenco/ziggy=serve per prendere le routes con il nome
function aggElementi(contenuti){
    for(let i of contenuti){
    console.log(i);
        let elemento=document.createElement("div");
        elemento.setAttribute("class", "SchedaAbbonamento");
        
    
        
        let titolo=document.createElement("h1");
        let costo=document.createTextNode('Costo mensile:'+ i.costo + '€');
        titolo.appendChild(costo);
        
    
        let desc=document.createElement("p");
        let paragrafo=document.createTextNode('Inizio:'+ i.data1);
        desc.appendChild(paragrafo);
        let desc2=document.createElement('p');
        desc2.setAttribute('class','fine');
        let paragrafo2=document.createTextNode('Fine:'+ i.data2);
        desc2.appendChild(paragrafo2);
        elemento.appendChild(titolo);

        elemento.appendChild(desc);
        elemento.appendChild(desc2);
        let pulsante=document.createElement("a");
        pulsante.setAttribute('class','pulsante');
        let pulsante2=document.createElement("a");
        pulsante2.setAttribute('class','pulsante');
        let aggA=document.createTextNode('+ un mese');
        let aggA2=document.createTextNode('+ tre mesi');
        pulsante.addEventListener('click', unMese);
        pulsante.appendChild(aggA);
        
        elemento.appendChild(pulsante);
        pulsante2.addEventListener('click', treMesi);
        pulsante2.appendChild(aggA2);
         elemento.appendChild(pulsante2);
         abbona.appendChild(elemento);
         
         console.log(cf);
         
    
    
    }
    
    }
  
        
    
    
    
    const abbona=document.querySelector(".abbonamento1"); 

    
    function onResponse(response){
        return response.json();
    }
    function onJson(json){
        console.log(json);
        aggElementi(json);
    }
    function onJson2(json){
        console.log(json);
        let aggStriFine=document.querySelector(".SchedaAbbonamento .fine");
        aggStriFine.textContent='Fine:'+ json[0].data2;
        
    }
    function unMese(event){
        fetch(route('aggAbbonamento',[cf,'mensile'])).then(onResponse).then(onJson2);
    }
    function treMesi(event){
        fetch(route('aggAbbonamento',[cf,'trimestrale'])).then(onResponse).then(onJson2)
    }
    
    fetch(route("abbonamento",cf)).then(onResponse).then(onJson);