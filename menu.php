<?php
declare(strict_types=1);

$menu = <<<EOD
===================================================
Выберите демонстрацию паттерна для запуска:
1. Builder Demo
2. Command Demo
3. Composite Demo
4. Decorator Demo
5. Factory Demo
6. Proxy Demo
0. Выход
===================================================
Введите номер опции: 
EOD;

while (true) {
    echo $menu;
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            echo "\nЗапуск BuilderDemo.php...\n";
            require __DIR__ . '/Demo/BuilderDemo.php';
            break;
        case '2':
            echo "\nЗапуск CommandDemo.php...\n";
            require __DIR__ . '/Demo/CommandDemo.php';
            break;
        case '3':
            echo "\nЗапуск CompositeDemo.php...\n";
            require __DIR__ . '/Demo/CompositeDemo.php';
            break;
        case '4':
            echo "\nЗапуск DecoratorDemo.php...\n";
            require __DIR__ . '/Demo/DecoratorDemo.php';
            break;
        case '5':
            echo "\nЗапуск FactoryDemo.php...\n";
            require __DIR__ . '/Demo/FactoryDemo.php';
            break;
        case '6':
            echo "\nЗапуск ProxyDemo.php...\n";
            require __DIR__ . '/Demo/ProxyDemo.php';
            break;
        case '0':
            echo "\nВыход из программы.\n";
            exit;
        default:
            echo "\nНеверный выбор. Попробуйте снова.\n";
            break;
    }

    echo "\nНажмите Enter для возврата в меню...";
    fgets(STDIN);
    echo "\n\n";
}
