<?php
function vypisObsah(DvourozmernyObrazec $o){
        return $o->ziskejObsah();
      }

function vypisObvod(DvourozmernyObrazec $o){
        return $o->ziskejObvod();
      }
  
  function vypisObjem(TrojrozmernyObrazec $o){
        return $o->ziskejObjem();
      }

function vypisPovrch(TrojrozmernyObrazec $o){
        return $o->ziskejPovrch();
       }

function info(User $u){
        return $u->info();
       }
?>