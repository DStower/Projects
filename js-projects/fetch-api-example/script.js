let cat_btn = document.getElementById('cat_btn'),
    dog_btn = document.getElementById('dog_btn'),
    cat_result = document.getElementById('cat_result'),
    dog_result = document.getElementById('dog_result');

cat_btn.onclick = () => {
    fetch('https://aws.random.cat/meow')
        .then(response => response.json())
        .then(data => {
            cat_result.innerHTML = `<img src=${data.file} alt="cat">`;
        }).catch(err => {
            console.log('rejected', err);
        });
}

dog_btn.onclick = () => {
    fetch('https://random.dog/woof.json')
        .then(response => response.json())
        .then(data => {
            dog_result.innerHTML = `<img src=${data.url} alt="dog">`;
        }).catch(err => {
            console.log('rejected', err);
        });
}