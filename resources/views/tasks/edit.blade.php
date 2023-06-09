<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-2">
      <div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <h2>Edit Task</h2>
          </div>
          <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tasks.index') }}" enctype="multipart/form-data"> Back</a>
          </div>
        </div>
      </div> @if(session('status')) <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
      </div> @endif <form action="{{ route('tasks.update',$task->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT') <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Task Name:</strong>
              <input type="text" name="task_name" value="{{ $task->task_name }}" class="form-control" placeholder="Task Name"> @error('task_name') <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Description:</strong>
              <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $task->description }}"> @error('description') <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Author:</strong>
              <input type="text" name="author" value="{{ $task->author }}" class="form-control" placeholder="Author"> @error('author') <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>