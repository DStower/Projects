let countDate = new Date('sep 12, 2022 00:00:00').getTime();

function countDown(){
    let now = new Date().getTime();
    gap = countDate - now;
    
    let second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let d = Math.floor(gap / (day)),
        h = Math.floor((gap % (day)) / (hour)),
        m = Math.floor((gap % (hour)) / (minute)),
        s = Math.floor((gap % (minute)) / (second));

    document.getElementById('day').innerText = d;
    document.getElementById('hour').innerText = h;
    document.getElementById('minute').innerText = m;
    document.getElementById('second').innerText = s;
}

setInterval(function(){
    countDown();
}, 1000);