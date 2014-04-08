<html>
    <body>
        {{Form::model('task', array('action' => 'tasksController@store'))}}
        {{Form::Label('title', 'Titre')}}
        {{Form::Text('title', null)}}
        {{Form::Submit('Create')}}
        {{ Form::close() }}
        
         {{Form::model('task', array('action' => 'tasksController@indexRedirect'))}}
           {{Form::Submit('Annuler')}}
         {{ Form::close() }}
      </body>
</html>