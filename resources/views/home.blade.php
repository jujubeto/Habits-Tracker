<h1>
Wellcome to the Habit Tracker!
</h1>
<p>
This is a simple application to help you track your habits and achieve your goals. You can create new habits, mark them as completed, and see your progress over time. Start by creating a new habit and see how it goes!
</p>        
<p>
    Olá, {{ $name }}! Aqui estão seus hábitos atuais:
    <ul>   
        @foreach ($habits as $habit)
            <li>{{ $habit }}</li>
        @endforeach
    </ul>
</p>