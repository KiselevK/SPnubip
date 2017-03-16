using SpNubip.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace SpNubip.Controllers
{
    public class HomeController : Controller
    {
        SpDBmodel db = new SpDBmodel();

        public ActionResult News()
        {

            return View(db.News);
        }

        

        public ActionResult Contact()
        {
            return View(db.News);
        }

        public ActionResult Leaders()
        {
            return View();
        }

        public ActionResult Partners()
        {
            return View(db.Partners);
        }

        public ActionResult Projects()
        {
            return View(db.Projects); 
        }
        


        [HttpGet]
        public ActionResult PageWithPartners(Guid id)
        {
            {
                if (id == null)
                {
                    return HttpNotFound();
                }
                var partners = db.Partners.Find(id);
                if (partners != null)
                {
                    return View(partners);
                }
                return HttpNotFound();
            }
        }

        [HttpGet]
        public ActionResult PageWithNew(Guid id)
                  
        {
            if (id == null)
            {
                return HttpNotFound();
            }
            var news = db.News.Find(id);
            if (news != null)
            {
                return View(news);
            }
            return HttpNotFound();
        }

        public ActionResult Info()
        {
            return View();
        }

        [HttpGet]
        public ActionResult PageWithProjects()

        {
            //if (id == null)    Guid id
            //{
            //    return HttpNotFound();
            //}
            //var Projects = db.Projects.Find(id);
            //if (Projects != null)
            //{
            //    return View(Projects);
            //}
            //return HttpNotFound();

            return View();
        }

        //for index layout
        public ActionResult Slider()
        {
            return View(db.News);
        }

        public ActionResult Mission()
        {
            return View();
        }

        public ActionResult Presentation()
        {
            return View();
        }
        public ActionResult Strategy_plan()
        {
            return View();
        }
        public ActionResult Diagram1()
        {
            return View();
        }
        public ActionResult Diagram2()
        {
            return View();
        }

        public ActionResult Potential()
        {
            return View();
        }


        //get data from database by id
        //    //var info = _database.GetNewById(id);
        //var data = new News
        //{
        //    //ID_News = info.id,
        //    //Title = info.Title,
        //    //NewText = info...

        //};


    }


}
