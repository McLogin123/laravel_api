<?php

namespace Database\Seeders;
use App\Models\Driver;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = [
            [
                'number' => 1,
                'name' => 'Max Verstappen',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/max-verstappen-f1-driver-profile-picture.png',
                'team' => 'Red Bull Racing',
                'country' => 'Holanda',
            ],
            [
                'number' => 22,
                'name' => 'Yuki Tsunoda',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/yuki-tsunoda-f1-driver-profile-picture.png',
                'team' => 'Red Bull Racing', // Nota: Según tu JSON está en Red Bull Racing
                'country' => 'Japón',
            ],
            [
                'number' => 44,
                'name' => 'Lewis Hamilton',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/lewis-hamilton-f1-driver-profile-picture.png',
                'team' => 'Ferrari',
                'country' => 'Reino Unido',
            ],
            [
                'number' => 16,
                'name' => 'Charles Leclerc',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/charles-leclerc-f1-driver-profile-picture.png',
                'team' => 'Ferrari',
                'country' => 'Mónaco',
            ],
            [
                'number' => 63,
                'name' => 'George Russell',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/george-russell-f1-driver-profile-picture.png',
                'team' => 'Mercedes',
                'country' => 'Reino Unido',
            ],
            [
                'number' => 12,
                'name' => 'Kimi Antonelli',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/kimi-antonelli-f1-driver-profile-picture.png',
                'team' => 'Mercedes',
                'country' => 'Italia',
            ],
            [
                'number' => 4,
                'name' => 'Lando Norris',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/lando-norris-f1-driver-profile-picture.png',
                'team' => 'McLaren',
                'country' => 'Reino Unido',
            ],
            [
                'number' => 81,
                'name' => 'Oscar Piastri',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/oscar-piastri-f1-driver-profile-picture.png',
                'team' => 'McLaren',
                'country' => 'Australia',
            ],
            [
                'number' => 14,
                'name' => 'Fernando Alonso',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/fernando-alonso-f1-driver-profile-picture.png',
                'team' => 'Aston Martin',
                'country' => 'España',
            ],
            [
                'number' => 18,
                'name' => 'Lance Stroll',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/lance-stroll-f1-driver-profile-picture.png',
                'team' => 'Aston Martin',
                'country' => 'Canadá',
            ],
            [
                'number' => 10,
                'name' => 'Pierre Gasly',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/pierre-gasly-f1-driver-profile-picture.png',
                'team' => 'Alpine',
                'country' => 'Francia',
            ],
            [
                'number' => 7,
                'name' => 'Franco Colapinto',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/franco-colapinto-f1-driver-profile-picture.png',
                'team' => 'Alpine',
                'country' => 'Argentina',
            ],
            [
                'number' => 23,
                'name' => 'Alexander Albon',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/alexander-albon-f1-driver-profile-picture.png',
                'team' => 'Williams',
                'country' => 'Tailandia',
            ],
            [
                'number' => 55,
                'name' => 'Carlos Sainz',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/carlos-sainz-f1-driver-profile-picture.png',
                'team' => 'Williams',
                'country' => 'España',
            ],
            [
                'number' => 30,
                'name' => 'Liam Lawson',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/liam-lawson-f1-driver-profile-picture.png',
                'team' => 'Racing Bulls',
                'country' => 'Nueva Zelanda',
            ],
            [
                'number' => 6,
                'name' => 'Isack Hadjar',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/isack-hadjar-f1-driver-profile-picture.png',
                'team' => 'Racing Bulls',
                'country' => 'Francia',
            ],
            [
                'number' => 27,
                'name' => 'Nico Hülkenberg',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/nico-hulkenberg-f1-driver-profile-picture.png',
                'team' => 'Sauber',
                'country' => 'Alemania',
            ],
            [
                'number' => 5,
                'name' => 'Gabriel Bortoleto',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/gabriel-bortoleto-f1-driver-profile-picture.png',
                'team' => 'Sauber',
                'country' => 'Brasil',
            ],
            [
                'number' => 87,
                'name' => 'Oliver Bearman',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/oliver-bearman-f1-driver-profile-picture.png',
                'team' => 'Haas',
                'country' => 'Reino Unido',
            ],
            [
                'number' => 31,
                'name' => 'Esteban Ocon',
                'photo' => 'https://www.kymillman.com/wp-content/uploads/f1/pages/driver-profiles/driver-faces/esteban-ocon-f1-driver-profile-picture.png',
                'team' => 'Haas',
                'country' => 'Francia',
            ],
        ];
        
        foreach($drivers as $data) {
            $team = Team::where('team', $data['team'])->first();

            Driver::create([
                'number' => $data['number'],
                'name' => $data['name'],
                'photo' => $data['photo'],
                'team' => $data['team'],
                'country' => $data['country'],
                'team_id' => $team->id
            ]);
        }
    }
}
