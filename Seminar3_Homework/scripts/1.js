function cel_to_far(t) {
    return Math.floor(((9 / 5) * t + 32) * 100) / 100;
}

const a = +prompt('Введите температуру в градусах Цельсия:');
alert (`Цельсий: ${a}, Фаренгейт: ${cel_to_far(a)}`);
// Вывод со спецсимволом градуса:
// alert(`${a}\xB0C = ${cel_to_far(a)}\xB0F`);