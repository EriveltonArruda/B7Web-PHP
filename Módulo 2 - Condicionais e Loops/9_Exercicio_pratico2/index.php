<?php
/* 
Seu exercício é recriar a seguinte estrutura usando loops:
-
--
---
----
-----
------
-------
--------
---------
----------
-----------
------------
-------------
--------------
---------------
*/

// Solução:
for ($i = 0; $i <= 20; $i++) {
  for ($j = 0; $j < $i; $j++) {
    echo '-';
  };

  echo '<br/>';
};
