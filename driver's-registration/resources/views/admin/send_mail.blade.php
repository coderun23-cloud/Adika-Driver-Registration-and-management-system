<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
      table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
      }
      th, td {
        padding: 12px;
        border: 1px solid #ddd;
      }
      th {
        background-color: #f4f4f4;
      }
      a {
        color: #3498db;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content" style="background-color: white;">
      <div class="container-fluid">
        <div>
          @if (session()->has('success'))
          <div class="alert alert-success">
              {{session()->get('success')}}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
          </div>
           
          @endif
      </div>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#messageModal" data-id="{{ $user->id }}" data-name="{{ $user->name }}">Send Message</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          {{ $data->links() }}
        </div>
      </div>
    </div>
    @include('admin.footer')

    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="messageModalLabel">Send Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('mail',$user->id) }}" method="POST">
            @csrf
            <div class="modal-body">
              <input type="hidden" name="user_id" id="userId">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="userName" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Greeting:</label>
                <textarea class="form-control" name="greeting" id="message-text" required></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Main Body:</label>
                <textarea class="form-control" name="body" id="message-text" required></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Action Text:</label>
                <textarea class="form-control" name="text" id="message-text" required></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Action Url:</label>
                <textarea class="form-control" name="url" id="message-text" required></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">End Line:</label>
                <textarea class="form-control" name="end" id="message-text" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      // Script to populate the modal with User details
      document.addEventListener('DOMContentLoaded', function() {
        $('#messageModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var userId = button.data('id');
          var userName = button.data('name');
          var modal = $(this);
          modal.find('#userId').val(userId);
          modal.find('#userName').val(userName);
        });
      });
    </script>
  </body>
</html>
