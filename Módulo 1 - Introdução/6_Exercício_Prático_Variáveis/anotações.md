### Solução

Coloquei a vida e mana dentro do array de atributos, associei os valores iguais aos demais atributos

Na hora de chamar o atributo de vida dentro do echo VIDA, precisei colocar o array atributos antes de vida dessa forma:
echo "VIDA: ".$lista['atributos']['vida'];
