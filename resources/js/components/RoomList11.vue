<template>
  <div class="container" id="manage-vue">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Laravel + VueJS Product CRUD</h2>
        </div>
        <div class="pull-right">
          <button
            type="button"
            class="btn btn-success"
            data-toggle="modal"
            data-target="#create-item"
          >
            Add Room
          </button>
        </div>
      </div>
    </div>

    <!-- Item Listing -->
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <tr>
            <th class="col-md-2">Name</th>
            <th class="col-md-1">Price</th>
            <th class="col-md-7">adress</th>
            <!-- <th class="col-md-3">image</th> -->
            <th class="col-md-2">Action</th>
          </tr>
          <tr>
            <td>{{ name }}</td>
            <td>{{ price }}</td>
            <!-- <td>{{ adress }}</td>
            <td>{{ image }}</td> -->
            <td>{{ content }}</td>
            <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        </table>

        <!-- Pagination -->
        <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
              </a>
            </li>
            <li>
              <a href="#">1-2-3-4-5-6{{ page }}</a>
            </li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Create Item Modal -->
    <div
      class="modal fade"
      id="create-item"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tạo sản phẩm mới</h4>
          </div>
          <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" />
                <span class="error text-danger"></span>
              </div>

              <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" />
                <span class="error text-danger"></span>
              </div>

              <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control"></textarea>
                <span class="error text-danger">@</span>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">
                  Tạo sản phẩm
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Item Modal -->
    <div
      class="modal fade"
      id="edit-item"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Chỉnh sửa sản phẩm</h4>
          </div>
          <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" />
                <span class="error text-danger">@</span>
              </div>

              <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" />
                <span class="error text-danger">@</span>
              </div>

              <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control"></textarea>
                <span class="error text-danger">@</span>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-success">
                  Cập nhật sản phẩm
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>