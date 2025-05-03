<?php

function buildMenu($items, $parentId = null) {
    $html = '';
    $children = array_filter($items, fn($item) => $item['parent_id'] === $parentId);

    if (!empty($children)) {
        $html .= '<ul>';
        foreach ($children as $child) {
            $html .= '<li>' . htmlspecialchars($child['title']);
            $html .= buildMenu($items, $child['id']);
            $html .= '</li>';
        }
        $html .= '</ul>';
    }

    return $html;
}

// Verilənlər bazasından bütün menyuları oxuyuruq
$pdo = new PDO('mysql:host=localhost;dbname=sinam_task', 'root', '');
$stmt = $pdo->query("SELECT * FROM menus");
$menus = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Menyunu göstəririk
echo buildMenu($menus);
