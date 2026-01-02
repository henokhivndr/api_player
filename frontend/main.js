//ambil endpoint player sama position
const API_PLAYERS = "http://localhost:8000/api/players"
const API_POSITION = "http://localhost:8000/api/position"

//ambil semua elemen yang dibutuhin di html nya
const form = document.getElementById('playerForm')
const positionSelect = document.getElementById('position_id')
const message = document.getElementById('message')

//bikin function buat nampilin opsi posisi pemain
async function loadPositions() {
    //ambil API_POSITION
    try {
        this.API_POSITION

        const res = await fetch(API_POSITION)
        const result = await res.json()

        const positions = result.data
        
        positions.map((position) => {
            //bikin elemen option dan isi sama nama posisi
            const option = document.createElement('option')
            option.value = position.id_position
            option.textContent = position.position_name

            positionSelect.appendChild(option)
        })
    } catch (error) {
        console.error(error)
    }
}

//bikin function buat tambah data
async function submitPlayers(e) {
    try {
        e.preventDefault()

        this.API_PLAYERS

        const data = {
            player_name: document.getElementById('player_name').value,
            position_id: document.getElementById('position_id').value,
            skill: document.getElementById('skill').value
        }

        const res = await fetch(API_PLAYERS, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })

        const result = await res.json()

        message.innerText = 'Player berhasil ditambahkan'
        message.className = 'text-green-600'

        form.reset()
    } catch (error) {
        console.error(error)
        message.innerText = 'Player gagal ditambahkan'
        message.className = 'text-red-600'
    }
}

form.addEventListener('submit', submitPlayers)
loadPositions()