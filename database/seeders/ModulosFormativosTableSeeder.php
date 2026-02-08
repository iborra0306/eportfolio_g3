<?php

namespace Database\Seeders;

use App\Models\ModuloFormativo;
use Illuminate\Database\Seeder;

class ModulosFormativosTableSeeder extends Seeder
{
    public function run(): void
    {
        ModuloFormativo::truncate();

        foreach (self::$modulosFormativos as $modulo) {
            ModuloFormativo::insert([
                'ciclo_formativo_id' => $modulo['ciclo_formativo_id'],
                'nombre' => $modulo['nombre'],
                'codigo' => $modulo['codigo'],
                'horas_totales' => $modulo['horas_totales'],
                'curso_escolar' => $modulo['curso_escolar'],
                'centro' => $modulo['centro'],
                'docente_id' => $modulo['docente_id'],
                'descripcion' => $modulo['descripcion'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('¡Tabla módulos formativos inicializada con datos!');
    }

    public static $modulosFormativos = [
        [
            'ciclo_formativo_id' => 94, // DAW
            'nombre' => 'Desarrollo Web en Entorno Servidor',
            'codigo' => 'MP0368',
            'horas_totales' => 180,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 1,
            'descripcion' => 'Desarrollo de aplicaciones web en el lado del servidor utilizando PHP, Laravel, Node.js y bases de datos',
        ],
        [
            'ciclo_formativo_id' => 94,
            'nombre' => 'Desarrollo Web en Entorno Cliente',
            'codigo' => 'MP0367',
            'horas_totales' => 165,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 2,
            'descripcion' => 'Programación de interfaces web con JavaScript, TypeScript, React, Vue.js y Angular',
        ],
        [
            'ciclo_formativo_id' => 94,
            'nombre' => 'Diseño de Interfaces Web',
            'codigo' => 'MP0372',
            'horas_totales' => 150,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 3,
            'descripcion' => 'Diseño y maquetación de interfaces web responsivas con HTML5, CSS3, Sass, Figma y Adobe XD',
        ],
        [
            'ciclo_formativo_id' => 94,
            'nombre' => 'Despliegue de Aplicaciones Web',
            'codigo' => 'MP0370',
            'horas_totales' => 90,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 4,
            'descripcion' => 'Configuración de servidores web, Docker, CI/CD, AWS y Azure para despliegue de aplicaciones',
        ],
        [
            'ciclo_formativo_id' => 94,
            'nombre' => 'Empresa e Iniciativa Emprendedora',
            'codigo' => 'MP0371',
            'horas_totales' => 65,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 5,
            'descripcion' => 'Gestión empresarial, plan de negocio, marketing digital y emprendimiento en el sector tecnológico',
        ],
        [
            'ciclo_formativo_id' => 93, // DAM
            'nombre' => 'Programación',
            'codigo' => 'MP0375',
            'horas_totales' => 265,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 6,
            'descripcion' => 'Fundamentos de programación con Java, POO, estructuras de datos y algoritmos',
        ],
        [
            'ciclo_formativo_id' => 93,
            'nombre' => 'Bases de Datos',
            'codigo' => 'MP0374',
            'horas_totales' => 195,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 7,
            'descripcion' => 'Diseño, implementación y administración de bases de datos con MySQL, PostgreSQL y MongoDB',
        ],
        [
            'ciclo_formativo_id' => 93,
            'nombre' => 'Sistemas Informáticos',
            'codigo' => 'MP0373',
            'horas_totales' => 205,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 8,
            'descripcion' => 'Administración de sistemas Linux/Windows, virtualización, redes y seguridad básica',
        ],
        [
            'ciclo_formativo_id' => 93,
            'nombre' => 'Entornos de Desarrollo',
            'codigo' => 'MP0376',
            'horas_totales' => 90,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 9,
            'descripcion' => 'Configuración de entornos de desarrollo, Git, metodologías ágiles y herramientas de desarrollo',
        ],
        [
            'ciclo_formativo_id' => 93,
            'nombre' => 'Acceso a Datos',
            'codigo' => 'MP0483',
            'horas_totales' => 100,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 10,
            'descripcion' => 'Acceso a bases de datos con JDBC, Hibernate, JPA y ORM en aplicaciones Java',
        ],
        [
            'ciclo_formativo_id' => 91, // ASIR
            'nombre' => 'Implantación de Sistemas Operativos',
            'codigo' => 'MP0489',
            'horas_totales' => 205,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Alonso Quijano',
            'docente_id' => 11,
            'descripcion' => 'Instalación y configuración de sistemas operativos Windows Server y Linux Enterprise',
        ],
        [
            'ciclo_formativo_id' => 91,
            'nombre' => 'Planificación y Administración de Redes',
            'codigo' => 'MP0490',
            'horas_totales' => 165,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Alonso Quijano',
            'docente_id' => 12,
            'descripcion' => 'Diseño, configuración y administración de redes LAN, WAN, VLANs y protocolos de enrutamiento',
        ],
        [
            'ciclo_formativo_id' => 91,
            'nombre' => 'Fundamentos de Hardware',
            'codigo' => 'MP0491',
            'horas_totales' => 130,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Alonso Quijano',
            'docente_id' => 13,
            'descripcion' => 'Arquitectura de computadores, ensamblaje, mantenimiento y reparación de equipos',
        ],
        [
            'ciclo_formativo_id' => 91,
            'nombre' => 'Administración de SGBD',
            'codigo' => 'MP0493',
            'horas_totales' => 95,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Alonso Quijano',
            'docente_id' => 14,
            'descripcion' => 'Administración avanzada de sistemas gestores de bases de datos empresariales',
        ],
        [
            'ciclo_formativo_id' => 33, // Marketing
            'nombre' => 'Marketing Digital',
            'codigo' => 'MP0567',
            'horas_totales' => 180,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Cervantes',
            'docente_id' => 15,
            'descripcion' => 'Estrategias de marketing online, SEO, SEM, redes sociales y analítica web',
        ],
        [
            'ciclo_formativo_id' => 33,
            'nombre' => 'Investigación Comercial',
            'codigo' => 'MP0568',
            'horas_totales' => 150,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Cervantes',
            'docente_id' => 16,
            'descripcion' => 'Técnicas de investigación de mercados, análisis de datos y estudios de viabilidad',
        ],
        [
            'ciclo_formativo_id' => 33,
            'nombre' => 'Gestión de Productos y Servicios',
            'codigo' => 'MP0569',
            'horas_totales' => 120,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Cervantes',
            'docente_id' => 17,
            'descripcion' => 'Desarrollo y gestión de portfolios de productos, pricing y estrategias de lanzamiento',
        ],
        [
            'ciclo_formativo_id' => 108, // Mecatrónica
            'nombre' => 'Automatización Industrial',
            'codigo' => 'MP0678',
            'horas_totales' => 210,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Politécnico',
            'docente_id' => 18,
            'descripcion' => 'Sistemas de automatización, PLCs, robótica industrial y control de procesos',
        ],
        [
            'ciclo_formativo_id' => 108,
            'nombre' => 'Sistemas Electrónicos',
            'codigo' => 'MP0679',
            'horas_totales' => 190,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Politécnico',
            'docente_id' => 19,
            'descripcion' => 'Diseño y mantenimiento de circuitos electrónicos, microcontroladores y sistemas embebidos',
        ],
        [
            'ciclo_formativo_id' => 108,
            'nombre' => 'Mecánica Aplicada',
            'codigo' => 'MP0680',
            'horas_totales' => 175,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Politécnico',
            'docente_id' => 20,
            'descripcion' => 'Diseño mecánico, neumática, hidráulica y mantenimiento de sistemas mecatrónicos',
        ],
        [
            'ciclo_formativo_id' => 94, // DAW - adicional
            'nombre' => 'Lenguajes de Marcas y Sistemas de Gestión de Información',
            'codigo' => 'MP0369',
            'horas_totales' => 95,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Francisco de Quevedo',
            'docente_id' => 21,
            'descripcion' => 'XML, JSON, APIs REST, gestión de información y estándares de documentación',
        ],
        [
            'ciclo_formativo_id' => 93, // DAM - adicional
            'nombre' => 'Programación de Servicios y Procesos',
            'codigo' => 'MP0485',
            'horas_totales' => 90,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES El Greco',
            'docente_id' => 22,
            'descripcion' => 'Programación multihilo, sockets, servicios web y procesos concurrentes en Java',
        ],
        [
            'ciclo_formativo_id' => 91, // ASIR - adicional
            'nombre' => 'Seguridad y Alta Disponibilidad',
            'codigo' => 'MP0494',
            'horas_totales' => 110,
            'curso_escolar' => '2023-2024',
            'centro' => 'IES Alonso Quijano',
            'docente_id' => 23,
            'descripcion' => 'Seguridad perimetral, cortafuegos, VPN, sistemas de alta disponibilidad y backup',
        ],
    ];
}
