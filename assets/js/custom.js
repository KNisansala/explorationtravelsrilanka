/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('.map-container')
    .click(function(){
            $(this).find('iframe').addClass('clicked')})
    .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')});


      