var output=document.getElementById('content');
function changeFont(font){
output.style.fontFamily=font.value;
}
function changeweight(weight){
    output.style.fontSize=weight.value;
}
const bol=document.getElementById('bol');
bol.addEventListener('click',function(){
bold();
});
function bold(){
    var bold=output.style.fontWeight;
    if(bold=='normal')
    {
        output.style.fontWeight="bold";
    }
    else
    {
        output.style.fontWeight="normal";
    }
}
const ita=document.getElementById('ita');
ita.addEventListener('click',function(){
italic();
});
function italic(){
    var ita=output.style.fontStyle;
    if(ita=='normal')
    {
        output.style.fontStyle="italic";
    }
    else
    {
        output.style.fontStyle="normal";
    }
}
const under2=document.getElementById('line');
under2.addEventListener('click',function(){
under();
});
function under(){
    var under1=output.style.textDecoration;
    if(under1 !=='underline')
    {
        output.style.textDecoration="underline";
    }
    else
    {
        output.style.textDecoration="none";
    }
}
var reset=document.getElementById('reset');
reset.addEventListener('click',function(){
start();
});
function start()
{
    output.style.fontStyle="normal";
    output.style.textDecoration="none";
    output.style.fontWeight="normal";
}
var cls=document.getElementById('clear');
cls.addEventListener('click',function(){
clar();
});
function clar()
{
output.value="";
}
// color picker for body...
var inpt=document.querySelector('#colorInput');
var hexvalue=document.querySelector('#hex');

inpt.addEventListener('input',function(){
 color_picker();
});
function color_picker()
{
const color = inpt.value;
hexvalue.value = color;
document.body.style.background = color; 
}
// for font....
var inputfont=document.querySelector('#colorfont');
var hexvaluefont=document.querySelector('#hexfont');
inputfont.addEventListener('input',function(){
 colorfont_picker();
});
function colorfont_picker()
{
const color = inputfont.value;
hexvaluefont.value = color;
document.getElementById('content').style.background = color; 
}


//download
document.getElementById('download-btn').addEventListener('click',function(){
    var text =output.value;
    var filename=document.getElementById('filename').value; 
     
    var blob =new Blob([text],{
        type:'data:text/plain;charset=utf-8'
    });
    saveAs(blob,filename);
    },false);

