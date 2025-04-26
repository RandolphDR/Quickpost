<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Greet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A friendly greeting command with personalized responses';

    /**
     * Special names and their custom greetings
     */
    private array $specialGreetings = [
        'RandolphDR' => [
            'greeting' => "✨ Good Day Master, Welcome to your Laravel Playground! ✨",
            'color' => 'blue'
        ],
        'Randolph' => [
            'greeting' => "Wa, wait, thats the name of my master, Hello Master!",
            'color' => 'yellow'
        ],
        'Artu' => [
            'greeting' => "Very Iconic! Hello Master Artu!",
            'color' => 'green'
        ]
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->showWelcomeArt();

        $name = $this->getUserName();

        $this->greetUser($name);

        $this->showRandomTip();
    }

    /**
     * Display welcome ASCII art
     */
    protected function showWelcomeArt(): void
    {
        $this->line("
 ____                 _       _       _      _        ____  _                                             _
|  _ \ __ _ _ __   __| | ___ | |_ __ | |__  ( ) ___  |  _ \| | __ _ _   _  __ _ _ __ ___  _   _ _ __   __| |
| |_) / _` | '_ \ / _` |/ _ \| | '_ \| '_ \ |/ / __| | |_) | |/ _` | | | |/ _` | '__/ _ \| | | | '_ \ / _` |
|  _ < (_| | | | | (_| | (_) | | |_) | | | |   \__ \ |  __/| | (_| | |_| | (_| | | | (_) | |_| | | | | (_| |
|_| \_\__,_|_| |_|\__,_|\___/|_| .__/|_| |_|   |___/ |_|   |_|\__,_|\__, |\__, |_|  \___/ \__,_|_| |_|\__,_|
                               |_|                                  |___/ |___/

        ");
    }

    /**
     * Get the user's name either from argument or prompt
     */
    protected function getUserName(): string
    {
        $name = $this->argument('name');

        if (empty($name)) {
            $name = $this->ask('What is your name, are you my master?');
        }

        return trim($name);
    }

    /**
     * Greet the user with a personalized message
     */
    protected function greetUser(string $name): void
    {
        $normalized = Str::lower(trim($name));

        // Check for special greetings
        foreach ($this->specialGreetings as $specialName => $greeting) {
            if (Str::lower($specialName) === $normalized) {
                $this->info(str_repeat('-', 100));
                $this->output->writeln("<fg={$greeting['color']}>{$greeting['greeting']}</>");
                $this->info(str_repeat('-', 100));
                return;
            }
        }

        $this->info(str_repeat('-', 100));

        $this->info("You are not My Master, Anyway, Welcome to this Laravel application!");

        $this->info(str_repeat('-', 100));

        if (empty(trim($name))) {
            $this->error("Wait... you don't have a name? Are you a ghost? 👻");
        }
    }

    /**
     * Show a random developer tip
     */
    protected function showRandomTip(): void
    {
        $tips = [
            'Did you know? My master is a great Developer!',
            'You know that I know what you know cause we know what we know?',
        ];

        $this->newLine();
        $this->line("💡 <fg=cyan>" . $tips[array_rand($tips)] . "</>");
    }
}
