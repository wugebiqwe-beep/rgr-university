USE university_db;

INSERT INTO faculties (name) VALUES
('Факультет компʼютерних наук');

INSERT INTO departments (name, faculty_id) VALUES
('Кафедра програмної інженерії', 1);

INSERT INTO groups (name, course, department_id) VALUES
('КІ-241', 2, 1);

INSERT INTO students (full_name, birth_date, group_id) VALUES
('Примачок Богдан', '2004-01-15', 1);

INSERT INTO teachers (full_name, department_id) VALUES
('Іванов Іван Іванович', 1);

INSERT INTO subjects (name, department_id) VALUES
('Бази даних', 1);
