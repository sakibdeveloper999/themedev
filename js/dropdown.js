console.log('hello');
document.getElementById('secondary').addEventListener('click', function() {
    document.getElementById('demo').innerHTML = 'You clicked the secondary title!';
    document.getElementById('demo').style.color = 'red';
});