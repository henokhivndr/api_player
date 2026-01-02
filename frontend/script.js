//cara 2 async await

async function getPlayer() {
    const API_URL = "http://localhost:8000/api/players"
    const response = await fetch(API_URL)
    const result = await response.json()

    const players = result.data
    
    const container = document.getElementById('players')
    const loading = document.getElementById('loading')

    loading.classList.add('hidden')
    container.classList.remove('hidden')

    players.map((player) => {
        const card = document.createElement('div')
        card.className = 'bg-white p-5 rounded shadow'
        card.innerHTML = `
            <h2 class='font-bold'>${player.player_name}</h2>
            <h2 class='font-semibold'>${player.position.position_name}</h2>
            <p class='text-gray-500'>${player.skill}</p>
        `

        container.appendChild(card)
    })
}

getPlayer()