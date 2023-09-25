Factores a tener en cuenta

-Cuando ejecute el codigo tenga presente que ningun estudiante estara inscrito a un curso por lo que debera agrearlos manualmente 
-Puedes hacer que un estudiante se inscriba a un curso accediendo al link /matriculas y el estudiante solo puede ser registrado por medio del id (para evitar errorers)
ya que al ponerle mas datos como el nombre, al momento de agregarlo a un curso se requiere que muchos datos esten iguales que en la tabla de alumnos (cosa que facilitaria el front pero este caso no hay front) entonces para registrar a un alumno a un curso accendiendo a /matriculas solamente debe poner el id del estudiante y el id del curso.
-Puedes Eliminar matriculas mas no puedes editarlas esto debido a un error en al foreing key. (esto es un extra mile porque en las instrucciones no decia esto pero me parecio
dinamico crear un crud para las matriculas)
- Cuando ejecute el db:seed se crearan 10 estudiantes, 5 cursos y 10 docentes



