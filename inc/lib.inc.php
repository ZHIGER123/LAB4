<?php

function drawMenu(array $menu, bool $vertical = true) {
  if ($vertical) {
    echo "<ul>";
    foreach ($menu as $item) {
      echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
  } else {
    echo "<ul style='list-style:none; display:flex; gap:15px; padding:0; margin:0;'>";
    foreach ($menu as $item) {
      echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
  }
}