
SELECT a.nome, a.matricula, b.nome, b.codigo FROM usuario a, lab b, agendados c WHERE a.matricula = c.matricula AND b.codigo = c.codigo;

SELECT a.nome, a.matricula, b.nome, b.codigo, c.data, c.horarios, c.horarios FROM usuario a, lab b, agendados c WHERE a.matricula = c.matricula AND b.codigo = c.codigo;

SELECT a.nome, b.nome, c.data, c.horarios, c.horarios FROM usuario a, lab b, agendados c WHERE a.matricula = c.matricula AND b.codigo = c.codigo;

SELECT a.nome AS nomeUser, a.matricula AS codUser, b.nome, b.codigo, c.id, c.data, c.horarios, c.turno FROM usuario AS a, lab AS b, agendados AS c 
	INNER JOIN usuario u ON u.matricula=c.matricula 
	INNER JOIN lab l ON l.codigo=c.codigo;
	
ALTER TABLE lab ADD CONSTRAINT id 
FOREIGN KEY(id) REFERENCES agendados(id)