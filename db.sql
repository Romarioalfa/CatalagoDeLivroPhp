CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    disciplina VARCHAR(100) NOT NULL,
    ano_escolar VARCHAR(50) NOT NULL,
    sinopse TEXT
);
