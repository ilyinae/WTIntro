DELIMITER $$  
-- Процедура заполнения таблицы одноклассников
CREATE PROCEDURE fill_classmates_table()
BEGIN
-- Возраст - случайный в диапазоне 10-55 лет
-- Город - случайный из таблицы городов
  SET @ppl_count = (SELECT count(*) FROM peoples);
  SET @places_count = (SELECT count(*) FROM places);
  SET @i = 1;
  WHILE @i < @ppl_count+1 DO
   SET @name = (SELECT ppl_name FROM peoples WHERE id = @i);
   SET @rnd_city = FLOOR(RAND()*@places_count+1);
   SET @adress = (SELECT city FROM places WHERE id = @rnd_city);   
   SET @age = FLOOR(RAND()*45+10);
   INSERT INTO classmates (name, age, adress) VALUES (@name, @age, @adress);
   SET @i = @i + 1;  
  END WHILE;
END$$
DELIMITER ;

-- Список городов
CREATE TABLE places (id INT, city CHAR(20));
INSERT INTO places (id, city) VALUES (1, 'Калининград'), (2, 'Псков'), (3, 'Москва'), (4, 'Санкт-Петербург'),
                                     (5, 'Ярославль'), (6, 'Хабаровск'), (7, 'Южно-Сахалинск');
-- Список одноклассников
CREATE TABLE peoples (id INT, ppl_name CHAR(50));
INSERT INTO peoples (id, ppl_name) VALUES (1, 'Некрасов Давид'), (2, 'Дорофеев Арсений'), (3, 'Ермилов Николай'),
                                          (4, 'Грибов Тимофей'), (5, 'Исакова Арина'), (6, 'Андрианова Екатерина'),
                                          (7, 'Гончаров Кирилл'), (8, 'Журавлев Святослав'), (9, 'Белякова Маргарита'),
                                          (10, 'Баженов Лев'), (11, 'Воробьев Вячеслав'), (12, 'Дубов Максим'),
                                          (13, 'Русанов Руслан'), (14, 'Пирогова Анастасия'), (15, 'Демина Варвара'),
                                          (16, 'Алехина Татьяна'), (17, 'Колосова Ирина'), (18, 'Ерофеева Эмилия'),
                                          (19, 'Черныха Агата'), (20, 'Блинова Анна');
-- Создаем таблицу одноклассников:
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);
-- Вызываем процедуру заполнения таблицы
CALL fill_classmates_table();
-- И если рандом нас подвёл - добавим руками одного, точно попадающего под условия выборки
INSERT INTO classmates (name, age, adress) VALUES ('Коренной москвич Алёшенька', 25, 'Москва');

-- SELECT * FROM classmates;
-- Необходимо написать запрос на получение имен всех одногруппников (только имен, без всего остального),
-- которые живут в Москве и их возраст находится в диапазоне [18, 30) лет.
SELECT name AS 'Молодые москвичи' FROM classmates WHERE age >= 18 AND age < 30 AND adress = 'Москва';