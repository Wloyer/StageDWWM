			//liste des véhicules 

	// info des vehicules dynamique
document.querySelectorAll('#vehicle-list .list-group-item').forEach(item => {
        item.addEventListener('click', event => {
          // Afficher l'image du véhicule
          const vehicleImage = document.getElementById('vehicle-image');
          vehicleImage.src = event.target.dataset.vehicleImage;
          vehicleImage.style.display = 'block';
    
          // Afficher les informations du véhicule
          const vehicleInfo = document.getElementById('vehicle-info');
          vehicleInfo.innerHTML = event.target.dataset.vehicleInfo;
          vehicleInfo.style.display = 'block';
        });
      });
            
            
    
            //Rating pagination
    
    
            
