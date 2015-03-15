
var init_kissy_wf = function() {
    KISSY.use("waterfall", function (S, Waterfall) {
        new Waterfall({
            container: "#container_wf",    //节点容器
            minColCount: 3,             //最小列数
            colWidth: 350               //每列的宽度
        });
    });
};

init_kissy_wf();
