<!-- Object Rating and Review -->
<div class="card">
    <div class="card-header text-center">
        <h4 class="card-title">Like and Review</h4>
        <form class="form form-vertical" onsubmit="checkStar(event);">
            <div class="form-body">
                <div class="like-containter mb-3">
                    <i class=" btn btn-outline-primary fa fa-thumbs-up fs-4" id="star-1" onclick="setLike();"></i>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;" name="comment"></textarea>
                        <label for="floatingTextarea">Leave a comment here</label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end mb-3">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                </div>
            </div>
        </form>
        <p class="card-text">Please login as User to give like and review</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="reviews">
                <tbody>
                    <tr>
                        <td>
                            <p class="mb-0">Nama Akun</p>
                            <p class="fw-light">2022-07-12</p>
                            <p class="fw-bold">Rerum sed consectetur.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-0">Nama Akun 2</p>
                            <p class="fw-light">2022-07-12</p>
                            <p class="fw-bold">Rerum sed consectetur.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function setLike() {

        let url = "<?= base_url('review_atraction') ?>" + "/" + '<?= $url; ?>' + "/<?= $objectData->id; ?>";
        alert(url)
        // $.ajax({
        //     url: url,
        //     method: "get",
        //     dataType: "json",
        //     success: function(response) {
        //         $('#rowObjectArround').css("display", "none")
        //         $('#panelListTittle').html(response.panelList)
        //         datas = response.objectData
        //         ajaxUrl = response.url
        //         userMarker = null
        //         initMap()
        //         if (userPosition != null) {
        //             addUserManualMarkerToMap(userPosition)
        //         }
        //     },
        //     error: function(xhr, ajaxOptions, thrownError) {
        //         alert(xhr.status + "\n" +
        //             xhr.responseText + "\n" + thrownError);
        //     }
        // });
    }
</script>