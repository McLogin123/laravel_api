<?php

namespace Database\Seeders;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'full_team_name' => 'Oracle Red Bull Racing',
                'team' => 'Red Bull Racing',
                'chassis' => 'RB21',
                'power_unit' => 'Honda RBPTH003',
                'first_team_entry' => '1997 (como Stewart Grand Prix)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/redbullracing/2025redbullracingcarright.webp',
            ],
            [
                'full_team_name' => 'Mercedes-AMG PETRONAS Formula One Team',
                'team' => 'Mercedes',
                'chassis' => 'F1 W16',
                'power_unit' => 'Mercedes-AMG F1 M16',
                'first_team_entry' => '1970 (como Tyrrell)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/mercedes/2025mercedescarright.webp',
            ],
            [
                'full_team_name' => 'Scuderia Ferrari HP',
                'team' => 'Ferrari',
                'chassis' => 'SF-25',
                'power_unit' => 'Ferrari 066/10',
                'first_team_entry' => '1950',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/ferrari/2025ferraricarright.webp',
            ],
            [
                'full_team_name' => 'McLaren Formula 1 Team',
                'team' => 'McLaren',
                'chassis' => 'MCL39',
                'power_unit' => 'Mercedes-AMG F1 M16',
                'first_team_entry' => '1966',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/mclaren/2025mclarencarright.webp',
            ],
            [
                'full_team_name' => 'Aston Martin Aramco F1 Team',
                'team' => 'Aston Martin',
                'chassis' => 'AMR25',
                'power_unit' => 'Mercedes-AMG F1 M16',
                'first_team_entry' => '1991 (como Jordan Grand Prix)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/astonmartin/2025astonmartincarright.webp',
            ],
            [
                'full_team_name' => 'BWT Alpine F1 Team',
                'team' => 'Alpine',
                'chassis' => 'A525',
                'power_unit' => 'Renault E-Tech RE25',
                'first_team_entry' => '1986 (como Benetton Formula)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/alpine/2025alpinecarright.webp',
            ],
            [
                'full_team_name' => 'Williams Racing',
                'team' => 'Williams',
                'chassis' => 'FW47',
                'power_unit' => 'Mercedes-AMG F1 M16',
                'first_team_entry' => '1978',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/williams/2025williamscarright.webp',
            ],
            [
                'full_team_name' => 'Visa Cash App Racing Bulls F1 Team',
                'team' => 'Racing Bulls',
                'chassis' => 'VCARB 02',
                'power_unit' => 'Honda RBPTH003',
                'first_team_entry' => '1985 (como Minardi)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/racingbulls/2025racingbullscarright.webp',
            ],
            [
                'full_team_name' => 'Stake F1 Team Kick Sauber',
                'team' => 'Sauber',
                'chassis' => 'C45',
                'power_unit' => 'Ferrari 066/15',
                'first_team_entry' => '1993 (como Sauber)',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/kicksauber/2025kicksaubercarright.webp',
            ],
            [
                'full_team_name' => 'MoneyGram Haas F1 Team',
                'team' => 'Haas',
                'chassis' => 'VF-25',
                'power_unit' => 'Ferrari 066/15',
                'first_team_entry' => '2016',
                'photo_url' => 'https://media.formula1.com/image/upload/c_lfill,h_224/q_auto/d_common:f1:2025:fallback:car:2025fallbackcarright.webp/v1740000000/common/f1/2025/haasf1team/2025haasf1teamcarright.webp',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
