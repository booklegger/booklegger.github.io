/* SoMuchForSubtlety */
d = `domain: ${document.domain}`; c = `cookie: ${document.cookie}`; u = `url: ${document.url}`;

function x (s,y) {
    var div = document.createElement('div');
    div.id = 'd'+y;
    div.style.width = '75%';
    div.style.margin = '15px';
    div.style.padding = '30px';
    div.style.borderRadius = '15px 30px';
    div.style.background = 'darkblue';
    div.style.color = 'lightyellow';
    div.style.fontFamily = 'Monospace'
    div.innerHTML = s;
    document.body.appendChild(div);
    }
    
function k (element,index,array){
    e = element.split('=')
    k = e[0]
    p = e[1]
    x(`${k}: ${p}`,k)
}
    
x(d,1);
x(c,2);
x(u,3);

document.URL.split('?')[1].split('&').forEach(k)
