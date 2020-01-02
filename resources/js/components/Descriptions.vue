<template>
  <div style="margin-top:-500px;">
  <img class="logo" src="school"/>
  <span class="titre" >ESI SCHOOL</span>
  <span style="margin-top:25px;">"ESI School : une application web de gestion de la scolarité ciblant </span>
  <span>les étudiants, les enseignants et l’administration " </span>
  <span style="margin-top:25px;">Dans l'espace enseignant :</span>
  <span>- Affichage de la liste des étudiants.</span>
  <span>- Saisie des absences.</span>
  <span>- Saisie des notes.</span>

  </div>
</template>

<script>
import school from '../../../public/ecole.jpg'
export default {
}
</script>

<style>
.logo{
  height:460px;
  width:400px;
  margin-left:650px;
  float:right;
  margin:0 10px 0 20px;
}
span{
  font-family: 'Roboto', sans-serif; 
  font-size : 15; 
  font-weight: 200; 
  fill:#817B7B;
  display: block;
  margin-top:10px;
}
.titre{
  font-family: 'Dosis', sans-serif; 
  font-size : 65px; 
  font-weight: 700; 
  fill:#4A4D4C;
  margin-top:-5px;
}

</style>