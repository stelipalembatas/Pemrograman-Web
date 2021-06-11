

		
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');
			
			ap.list.switch(dataSwitchId);  

			
			ap.play();

			
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'At My Worst',
		        artist: 'Pink Sweats',
		        url: 'At_My_Worst.mp3',
		        cover: 'pink_sweats.jpg'
		    },
			{
		        name: 'Dancing in My Room',  
		        artist: '347aidan', 
		        url: 'Dancing_in_My_Room.mp3', 
		        cover: '347aidan.jpg' 
		    },
			{
				name: 'Bad Guy',
				artist: 'Billie Eilish',
				url: 'Bad_guy.mp3',
				cover: 'billie.jpg',
			},
			{
				name: 'Happy',
				artist: 'Pharrell Williams',
				url: 'Happy.mp3',
				cover: 'pharell.jpg',
			},
            {
				name: 'Gone',
				artist: 'ROSÉ',
				url: 'Gone.mp3',
				cover: 'rose2.jpg',
			},
            {
				name: 'Little Things',
				artist: 'One Direction',
				url: 'Little_Things.mp3',
				cover: 'oned.jpg',
			},
            {
				name: 'Rap God',
				artist: 'Eminem',
				url: 'Rap_God.mp3',
				cover: 'eminem.jpg',
			},
            {
				name: 'On The Ground',
				artist: 'ROSÉ',
				url: 'On_The_Ground.mp3',
				cover: 'rose1.jpg',
			},
            {
				name: 'Runaway',
				artist: 'AURORA',
				url: 'Runaway.mp3',
				cover: 'aurora.jpg',
			},
            {
				name: 'Take Me Home, Country Roads',
				artist: 'John Denver',
				url: 'Take_Me_Home.mp3',
				cover: 'john_denver.jpg',
			},
            {
				name: 'Stressed Out',
				artist: 'Twenty One Pilots',
				url: 'Stressed_Out.mp3',
				cover: 'twentyone.png',
			},
            {
				name: 'Uptown Funk',
				artist: 'Mark Ronson feat. Bruno Mars',
				url: 'Uptown_Funk.mp3',
				cover: 'uptown.jpg',
			},
            {
				name: 'What a Wonderful World',
				artist: 'Louis Armstrong',
				url: 'What_A_Wonderful_World.mp3',
				cover: 'louis.jpg',
			},


		    ]
		});