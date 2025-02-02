// JavaScript Document
//Declare variables
var elList, addLink, newEl, newText, counter, listItems, removeLink, tomato;
elList = document.getElementById('list'); // List of items
addLink = document.getElementById('addToList'); //Button t
counter = document.getElementById('counter');
tomato = document.getElementById('tomato');

function addItem(e){ // Declare function to process newly added item event
	e.preventDefault();
	newEl = document.createElement('div');
	newText = document.createTextNode('New list item');
	newEl.classList.add('alert');
	newEl.classList.add('alert-info');
	newEl.addEventListener("click", removeItem, false);
	newEl.appendChild(newText);
	elList.appendChild(newEl);
}

function updateCount(){ //Declare function to update shopping list count
	listItems = elList.getElementsByTagName('div').length;
	counter.innerHTML=listItems;
	
}

function removeItem(){
	this.remove();
	updateCount();
}

function removeTomato(){
	tomato.remove();
}

addLink.addEventListener('click', addItem, false);
elList.addEventListener('DOMNodeInserted', updateCount, false);
