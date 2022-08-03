<template>
  <div>
    <h1>Search result</h1>
    <div class="block-search">
      <form action="">
        <label>Name: </label><input name="name" type="text" /> <label>A: </label
        ><input name="address" type="text" />
        <input type="submit" value="Tìm kiếm" />
      </form>
    </div>
    <div>
      <table id="apartment">
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>Địa chỉ</th>
          <th>Ảnh</th>
          <th></th>
        </tr>
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->address}}</td>
          <td>
            <div class="content-img">
              <img
                width="50px;"
                height="50px;"
                :src="'/img/apartment/' + $item.image"
              />
            </div>
          </td>
          <td>
            <div class="container-btn">
              <a class="btn-form" href="">{{ __("Thêm") }}</a>
              <a class="btn-form" href="">{{ __("Sửa") }}</a>
              <a class="btn-form" href="">{{ __("Xóa") }}</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>