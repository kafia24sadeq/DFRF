const
activeClass={copy:'copyactive',paste:'pasteactive'},doneMessage={copy:'copied',paste:'pasted'},doneClass='done';window&&window.addEventListener('DOMContentLoaded',init);export function init(){const body=document&&document.body;if(!body||!navigator.clipboard)return;if(navigator.clipboard.writeText)body.classList.add(activeClass.copy);if(navigator.clipboard.readText)body.classList.add(activeClass.paste);body.addEventListener('click',clipboardHandler);}
async function clipboardHandler(e){const
target=e.target,type=(undefined===target.dataset.paste?'copy':'paste'),content=target.dataset[type];if(undefined===content)return;let select;try{select=content&&document.querySelector(content);}
catch(error){}
const handler={copy,paste};if(!await handler[type](select,content))return;if(!target.dataset.done)target.dataset.done=doneMessage[type];target.addEventListener('animationend',()=>target.classList.remove(doneClass),{once:true});target.classList.add(doneClass);}
async function copy(select,content){const copytext=select?select.value||select.innerText:content;try{await navigator.clipboard.writeText(copytext);return true;}
catch(error){console.log('copy error',error);}}
async function paste(select){if(!select)return;try{const pastetext=await navigator.clipboard.readText();if(undefined===select.value){select.innerText+=pastetext;}
else{select.value+=pastetext;}
return true;}
catch(error){console.log('paste error',error);}}