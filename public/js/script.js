'use strict';

// CLick avatar
const avatar = document.querySelector('.avatar');
const dropdownLinks = document.querySelector('.dropdown__links');

function openDropdownLinks(){
    dropdownLinks.classList.remove('hidden');

}

function closeDropdownLinks(){
    dropdownLinks.classList.add('hidden');
    
}

avatar.addEventListener('click',function(){
   if(dropdownLinks.classList.contains('hidden')) {
    openDropdownLinks();
   }else{
    closeDropdownLinks();
   }
})

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !dropdownLinks.classList.contains('hidden')) {
        closeDropdownLinks();
    }
  });