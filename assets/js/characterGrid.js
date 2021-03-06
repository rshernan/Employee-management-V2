const basePath = "http://localhost/employee-management-v2";

const init = () => {
  axios.get(`${basePath}/api/location`).then(({ data }) => {
    const locations = data;
    axios.get(`${basePath}/api/character`).then(({ data }) => {
      console.log(data);
      $("#jsGrid").jsGrid({
        width: "85vw",
        height: "65vh",
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        pageSize: 15,
        pageButtonCount: 8,
        data,

        fields: [
          {
            name: "id",
            type: "number",
            width: 20,
            css: "hidden",
            readOnly: true,
            align: "center",
          },
          { name: "name", type: "text", width: 60, validate: "required" },
          {
            name: "status",
            type: "select",
            items: [
              { Name: "Alive", Value: "Alive" },
              { Name: "Dead", Value: "Dead" },
              { Name: "Unknown", Value: "unknown" },
            ],
            valueField: "Value",
            textField: "Name",
            width: 40,
            validate: "required",
            valueType: "string",
          },
          { name: "species", type: "text", width: 40, validate: "required" },
          {
            name: "gender",
            type: "select",
            items: [
              { Name: "Female", Value: "Female" },
              { Name: "Male", Value: "Male" },
              { Name: "Genderless", Value: "Genderless" },
              { Name: "Unknown", Value: "unknown" },
            ],
            valueField: "Value",
            textField: "Name",
            width: 40,
            validate: "required",
          },
          {
            name: "originLocId",
            type: "select",
            items: locations,
            valueField: "id",
            textField: "name",
            width: 60,
            validate: "required",
            align: "center",
          },
          {
            name: "lastLocId",
            type: "select",
            items: locations,
            valueField: "id",
            textField: "name",
            width: 60,
            validate: "required",
            align: "center",
          },
          { type: "control" },
        ],

        onItemInserting: function ({ item }) {
          const data = {};

          $.each(item, function (key, value) {
            if (key != "id") {
              data[key] = value;
            }
          });
console.log(data);
          axios({
            method: "POST",
            url: `${basePath}/api/character`,
            data: data,
          }).then(() => {
            $("#jsGrid").jsGrid("refresh");
          });
        },

        onItemUpdating: function ({ item }) {
          data = JSON.stringify(item);
          axios({
            method: "PUT",
            url: `${basePath}/api/character`,
            data: data,
          }).then((response) => {
            if (response.status != 204) {
              $("#jsGrid").jsGrid("refresh");
            }
          });
        },

        onItemDeleting: function ({ item }) {
          axios
            .delete(`${basePath}/api/character`, {
              params: {
                id: item.id,
              },
            })
            .then(() => {
              $("#jsGrid").jsGrid("refresh");
            });
        },

        onRefreshing: function ({ grid }) {
          axios.get(`${basePath}/api/character`).then(({ data }) => {
            grid.data = data;
          });
        },

        rowClick: function (args) {},
        rowDoubleClick: function ({ item }) {
          window.location.href = `${basePath}/character/details/${item.id}`;
        },
      });
    });
  });
};

$(init);
