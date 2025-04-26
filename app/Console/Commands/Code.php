<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Code extends Command
{
    protected $signature = 'code';
    protected $description = 'Start PHP and Vite development servers in the background.';

    private $processes = [];

    protected function showWelcomeMessage()
    {
        $this->showLoadingSpinner(3, "Launching development mode", "🙇 Welcome Master, Let's go code! 💻");
        $this->Print_Dashes(70);
        $this->newLine();
        $this->Print_Message(" ____                 _       _       _     ____  ____");
        $this->Print_Message("|  _ \ __ _ _ __   __| | ___ | |_ __ | |__ |  _ \|  _ \ ");
        $this->Print_Message("| |_) / _` | '_ \ / _` |/ _ \| | '_ \| '_ \| | | | |_) |");
        $this->Print_Message("|  _ < (_| | | | | (_| | (_) | | |_) | | | | |_| |  _ <");
        $this->Print_Message("|_| \_\__,_|_| |_|\__,_|\___/|_| .__/|_| |_|____/|_| \_\ ");
        $this->Print_Message("                               |_| ");
        $this->Print_Line("🚀  <options=bold>Development servers are up and running — Good luck!</>");
    }

    public function showLoadingSpinner(int $duration = 3, string $message, string $done, bool $run = false)
    {
        $spinner = ['|', '/', '—', '\\'];
        $endTime = time() + $duration;

        while (time() < $endTime || $run === true) {
            foreach ($spinner as $frame) {
                $this->output->write("\r⏳ <options=bold>$message</> " . $frame . " ");
                usleep(100_000);
            }
        }
        echo "\r\033[K";
        $this->line("<options=bold>$done</>");
    }

    private function startProcess($command)
    {
        $process = new Process(explode(' ', $command));
        $process->start();
        return $process;
    }

    protected function displayProcessOutput()
    {
        foreach ($this->processes as $process) {
            if ($process->isRunning()) {
                $output = $process->getOutput();
                $errorOutput = $process->getErrorOutput();

                if (!empty($output)) {
                    $this->line($output);
                }

                if (!empty($errorOutput)) {
                    $this->error($errorOutput);
                }
            }
        }
    }

    protected function waitForTermination()
    {
        readline();

        $this->info("🛑  <options=bold>Stop all servers?</>");
        $confirm = strtolower($this->ask("Type 'yes' to STOP:"));

        if ($confirm === 'yes') {
            $this->terminateProcesses();
        } else {
            for ($i = 0; $i < 6; $i++) {
                echo "\033[1A\033[2K";
            }
            $this->waitForTermination();
        }
    }

    protected function terminateProcesses()
    {
        $this->newLine();
        $this->line("");
        $this->info("<fg=red>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</>");
        $this->showLoadingSpinner(3, "Shutting Down Servers", "✅ All Server are OFFLINE. Well done");
        $this->info("<fg=red>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</>");

        foreach ($this->processes as $process) {
            if ($process->isRunning()) {
                $process->stop();
            }
        }

        $this->newLine();
        $this->info("<fg=gray>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</>");
        $this->info("<fg=magenta;options=bold>💡 This was made by my MASTER. Ewesome!! Right?</>");
        $this->info("💡 command: " . "<fg=magenta;options=bold>php artisan code</>");
        $this->info("<fg=gray>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</>");
        $this->newLine();
        exit(0);
    }

    public function Print_Message($message)
    {

        foreach (str_split($message) as $char) {
            $this->output->write($char);
            time_nanosleep(0, 1000);

        }
        $this->newLine();

    }

    private function Print_Line(string $message)
    {
        $this->Print_Dashes(70);
        $this->info($message);
        $this->Print_Dashes(70);
    }

    private function Print_Dashes(int $max = 60)
    {
        $this->output->write("\r");
        for ($i = 0; $i < $max; $i++) {
            $this->output->write('—');
            time_nanosleep(0, 3000);
        }
        $this->newLine();
    }

    public function isPhpMyAdminRunning(): bool
    {
        $url = 'http://localhost/phpmyadmin/';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode === 200;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $this->Print_Dashes(70);
        while (!$this->isPhpMyAdminRunning()) {
            $this->showLoadingSpinner(0, "Checking Laragon Database", "🙇 Welcome Master, Please fix me! 💻", true);
            sleep(1);

            if ($this->isPhpMyAdminRunning()) {
                echo "\033[1A\033[2K";
                break;
            }
        }


        if ($this->isPhpMyAdminRunning()) {
            $this->processes[] = $this->startProcess('php artisan serve');
            $this->processes[] = $this->startProcess('npm run dev');

            $this->showWelcomeMessage();

            $this->newLine();
            $this->line("🎉  <options=bold>DEVELOPMENT ENVIRONMENT</>");
            $this->Print_Dashes(60);
            $this->info(" ➜  <options=bold>Database:</>     <fg=blue>http://localhost/phpmyadmin</>");
            $this->info(" ➜  <options=bold>Quickpost:</>   <fg=blue>http://127.0.0.1:8000</>");

            $this->Print_Dashes(60);

            exec('start http://localhost/phpmyadmin');
            exec('start http://127.0.0.1:8000');

            $this->newLine();
            $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
            $this->info(" ✅  Laragon Database is Active.");
            $this->info(" ✅  Laravel server and Vite are now running");
            $this->info(" 🛑  Press ENTER to stop all servers...");
            $this->line("━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━");
            $this->newLine();

            $this->waitForTermination();

            $this->displayProcessOutput();
        } else {
            $this->error("<fg=red;options=bold> ➜  Unable to connect to Laragon phpMyAdmin. Please ensure it is running.</>");
            $this->info("<fg=yellow;options=bold>💡 Execute the command:</>" . " <fg=magenta;options=bold>'php artisan code'</> " . "<fg=yellow;options=bold>again after starting phpMyAdmin.</>");
            return;
        }
    }
}
