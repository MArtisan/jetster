# SETUP

laravel new jetster

git remote add origin git@github.com:MArtisan/jetster.git

git push origin main

git branch -M dev

composer require laravel/jetstream

php artisan jetstream:install livewire

npm install && npm run dev

php artisan migrate

php artisan vendor:publish --tag=jetstream-views

php artisan make:livewire counter

This will generate the following two files:
- app\Http\Livewire\Counter.php
- resources\views\livewirecounter.blade.php

Include the JavaScript (on every page that will be using Livewire).

...
    @livewireStyles
</head>
<body>
    ...
 
    @livewireScripts
</body>
</html>
```

Include the component: <livewire:some-component />

```
<body>
    <livewire:counter />
```

## Add functionality

app\Http\Livewire\Counter.php

```
class Counter extends Component
{
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
```

resources\views\livewire\counter.blade.php

```
<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
```

LOGO SVG LOCATIONS:
- views/vendor/jetstream/components/application-mark.blade.php
- application-logo.blade.php
- authentication-card-logo.blade.php

_______________________________________________

# Tester
- g@g
- Test123!






















<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
```