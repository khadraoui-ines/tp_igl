<template>
<div style="margin-top:-300px;">
<table border="1" >          
    <thead>
        <tr>
            <th><p>Matricule</p></th>
            <th><p>Nom et Prenom  </p></th>
            <th><p>Date et lieu de naissance</p></th>
        </tr>
    </thead>
    <tbody>
    <tr v-for="etudiant in etudiants" v-bind:key="etudiant.id">
        <td><p>{{ etudiant.matricule }}</p></td>
        <td><p>{{ etudiant.name }}</p></td>
        <td><p>{{etudiant.date_naissance+' / '+etudiant.lieu_naissance}}</p></td>
    </tr>

    </tbody>
</table>     

</div>
</template>

<script>
export default{
data (){
return {
etudiants: [],
    etudiant: {
    name:'',
    matricule:'',
    groupe:'',
    date_naissance:'',
    lieu_naissance:'',
    },
    edit:false
}},
created()
{
    this.fetchEtudiants();
},
methods:{
/*increm: function(int) {
    this.k=this.k+1
      return (this.k)
      
    },*/
fetchEtudiants() {
fetch('api/etudiants')
.then(res=>res.json())
.then( res=>{this.etudiants=res.data;});
}}
};
</script>

<style>
table{
  margin-top:-510px;
  background-color:white;
  position:relative;
  width:100%;
  height:100px;
}
</style>

