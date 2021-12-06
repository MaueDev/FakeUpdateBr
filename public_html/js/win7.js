let body = document.getElementsByTagName('body');
body.addEventListener("load", TimerScript());


function TimerScript()
{
    console.log('foi');
    //Rodom Porcentagem
    min = Math.ceil(1);
    max = Math.floor(10);
    timeoutmax = Math.floor(3);
    let rodompct = Math.floor(Math.random() * (max - min)) + min;
    let bodytimer = document.querySelector("#timer");
    bodytimer.innerHTML = parseInt(rodompct) + parseInt(bodytimer.innerHTML);
    setTimeout(function(){ TimerScript() }, 6000);
}